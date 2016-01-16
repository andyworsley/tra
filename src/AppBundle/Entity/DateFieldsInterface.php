<?php

namespace AppBundle\Entity;

interface DateFieldsInterface
{
    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Document
     */
    public function setAdded($added);

    /**
     * Get added
     *
     * @return \DateTime
     */
    public function getAdded();

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Document
     */
    public function setUpdated($updated);

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated();

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     *
     * @return Document
     */
    public function setDeleted($deleted);

    /**
     * Get deleted
     *
     * @return \DateTime
     */
    public function getDeleted();
}
