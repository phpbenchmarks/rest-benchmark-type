<?php

namespace PhpBenchmarksRestType;

class CommentType
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /** @return int */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /** @return string */
    public function getName()
    {
        return $this->name;
    }
}