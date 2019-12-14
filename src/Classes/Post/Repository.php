<?php

namespace App\Classes\Post;

use App\Classes\Tools\Database;
use App\Classes\Post\Post;
use PDO;

class Repository
{
    public static function read($id)
    {
        $db = Database::getInstance()->getConnexion();
        $sth = $db->prepare('SELECT * FROM posts WHERE id=:id');

        $data = array('id' => $id);
        $sth->execute($data);
        $line = $sth->fetch(PDO::FETCH_ASSOC);

        return Post::initialize($line);
    }

    /*public static function getPlayList($id)
    {
        $db = Database::getInstance()->getConnexion();

        $sth = $db->prepare('SELECT * FROM songs WHERE id_album=:id_album');

        $data = array('id_album' => $id);

        $sth->execute($data);

        $lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
        $musiques = array();
        foreach ($lignes as $ligne) {
            $musiques[] = Music::initialize($ligne);
        }

        return $musiques;
    }*/

    public static function new(Post $post)
    {
        $db = Database::getInstance()->getConnexion();
        $sth = $db->prepare('insert into posts set id=:id,title=:title, content=:content, published=:published, created_at=:created_at');

        $sth->execute([
            'id' => $post->getId(),
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'created_at' => $post->getCreatedAt(),
            'published' => $post->getPublished(),
        ]);
    }

    public static function update(Post $post)
    {
        $db = Database::getInstance()->getConnexion();

        $sth = $db->prepare('update posts set title=:title, content=:content, published=:published where id =:id');

        $sth->execute([
            'id' => $post->getId(),
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'published' => $post->getPublished(),
        ]);
    }

    public static function delete(Post $post)
    {
        $db = Database::getInstance()->getConnexion();
        $sth = $db->prepare('delete from posts where id=:id');

        $sth->execute(['id' => $post->getId()]);
    }

    public static function getListPosts($limit)
    {
        $db = Database::getInstance()->getConnexion();

        $sth = $db->query("SELECT * FROM posts LIMIT $limit");

        $rawPosts = $sth->fetchAll(PDO::FETCH_ASSOC);
        $posts = [];
        foreach ($rawPosts as $rawPost) {
            $posts[] = Post::initialize($rawPost);
        }

        return $posts;
    }

    public static function getAllPosts()
    {
        $db = Database::getInstance()->getConnexion();

        $sth = $db->query('SELECT * FROM posts');

        $rawPosts = $sth->fetchAll(PDO::FETCH_ASSOC);
        $posts = [];
        foreach ($rawPosts as $rawPost) {
            $posts[] = Post::initialize($rawPost);
        }

        return $posts;
    }
}
