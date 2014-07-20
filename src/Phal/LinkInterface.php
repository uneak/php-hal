<?php

namespace Phal;

interface LinkInterface
{
    /**
     * Constructor
     *
     * @param string $href
     * @param bool $templated
     * @param string $type
     * @param string $deprecation
     * @param string $name
     * @param string $profile
     * @param string $title
     * @param string $hreflang
     */
    public function __construct(
        $href = null,
        $templated = false,
        $type = null,
        $deprecation = null,
        $name = null,
        $profile = null,
        $title = null,
        $hreflang = null
    );

    /**
     * Set href
     *
     * @param string $href
     * @return \Phal\LinkInterfaceInterface
     */
    public function setHref($href);

    /**
     * Get href
     *
     * @return string
     */
    public function getHref();

    /**
     * Set templated
     *
     * @param boolean $templated
     * @return \Phal\LinkInterface
     */
    public function setTemplated($templated);

    /**
     * Get templated
     *
     * @return boolean
     */
    public function getTemplated();

    /**
     * Set type
     *
     * @param string $type
     * @return \Phal\LinkInterface
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Set deprecation
     *
     * @param string $deprecation
     * @return \Phal\LinkInterface
     */
    public function setDeprecation($deprecation);

    /**
     * Get deprecation
     *
     * @return string
     */
    public function getDeprecation();

    /**
     * Set name
     *
     * @param string $name
     * @return \Phal\LinkInterface
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set profile
     *
     * @param string $profile
     * @return \Phal\LinkInterface
     */
    public function setProfile($profile);

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile();

    /**
     * Set title
     *
     * @param string $title
     * @return \Phal\LinkInterface
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set hreflang
     *
     * @param string $hreflang
     * @return \Phal\LinkInterface
     */
    public function setHreflang($hreflang);

    /**
     * Get hreflang
     *
     * @return string
     */
    public function getHreflang();

    /**
     * Get link attributes
     *
     * @return array
     */
    public function getAttributes();

    /**
     * Serialize link to array
     *
     * @return array
     */
    public function toArray();

    /**
     * Return serialized string
     *
     * @return string
     */
    public function __toString();
}
