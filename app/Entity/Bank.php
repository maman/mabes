<?php


namespace Mabes\Entity;

use Respect\Validation\Validator as v;

/**
 * @Entity
 * @Table(name="bank")
 * @HasLifecycleCallbacks
 **/
class Bank
{
    /**
     * @Id @Column(type="integer") @GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $bank_id = null;

    /**
     * @Column(type="string", length=64)
     * @var string
     */
    protected $bank_name;

    /**
     * @Column(type="string", length=32)
     * @var string
     */
    protected $bank_account;

    /**
     * @PrePersist @PreUpdate
     */
    public function validate()
    {
        // bank_name validation
        v::alnum()->assert($this->bank_name);

        // bank_accounnt validation
        v::numeric()->assert($this->bank_account);
    }

    /**
     * @param string $bank_account
     */
    public function setBankAccount($bank_account)
    {
        $this->bank_account = $bank_account;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
        return $this->bank_account;
    }

    /**
     * @param int $bank_id
     */
    public function setBankId($bank_id)
    {
        $this->bank_id = $bank_id;
    }

    /**
     * @return int
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * @param string $bank_name
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }
}

// EOF
