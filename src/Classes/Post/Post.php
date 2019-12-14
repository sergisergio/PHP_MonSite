<?php

namespace App\Classes\Post;

class Post
{
    private $id;
    private $title;
    private $content;
    private $published;
    private $createdAt;

    protected function __construct($map)
    {
        $this->id = $map['id'];
        $this->title = $map['title'];
        $this->content = $map['content'];
        $this->published = $map['published'];
        $this->createdAt = $map['created_at'];
    }

    public static function initialize($data = array())
    {
        if (isset($data['id'])) {
            $map['id'] = $data['id'];
        } else {
            $map['id'] = md5(microtime());
        }
        if (isset($data['title'])) {
            $map['title'] = $data['title'];
        } else {
            $map['title'] = '';
        }
        if (isset($data['content'])) {
            $map['content'] = $data['content'];
        } else {
            $map['content'] = '';
        }
        if (isset($data['published'])) {
            $map['published'] = $data['published'];
        } else {
            $map['published'] = '';
        }
        if (isset($data['created_at'])) {
            $map['created_at'] = $data['created_at'];
        } else {
            $map['created_at'] = date('Y-m-d H:i:s');
        }

        return new self($map);
    }

    public function update($updateData)
    {
        if (isset($updateData['title'])) {
            $this->title = $updateData['title'];
        }
        if (isset($updateData['content'])) {
            $this->content = $updateData['content'];
        }
        if (isset($updateData['published'])) {
            $this->published = $updateData['published'];
        }
    }

    /**
     * Retourne le code d'identification d'un album
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retourne le nom du site
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Retourne la auteur
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Retourne le fichier
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Retourne la date de création
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Modifie le code d'identification d'un album
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Modifie le nom du site
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Modifie la auteur de l'album
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Modifie le fichier
     */
    public function setPublished($published)
    {
        $this->file = $file;
    }

    /**
     * Modifie la date
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
