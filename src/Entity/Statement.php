<?php

namespace App\Entity;

use App\Repository\StatementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Faker\Factory;

#[ORM\Entity(repositoryClass: StatementRepository::class)]
class Statement extends Factory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $scenario = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $stateId = null;

    #[ORM\Column(length: 25)]
    private ?string $employeeId = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdDate = null;

    #[ORM\Column]
    private ?string $employeeName = null;

    #[ORM\Column(length: 100)]
    private ?string $employeeFunction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScenario(): ?int
    {
        return $this->scenario;
    }

    public function setScenario(int $scenario): self
    {
        $this->scenario = $scenario;

        return $this;
    }

    public function getStateId(): ?int
    {
        return $this->stateId;
    }

    public function setStateId(int $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    public function setEmployeeId(string $employeeId): self
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeInterface $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getEmployeeName(): ?string
    {
        return $this->employeeName;
    }

    public function setEmployeeName(string $employeeName): self
    {
        $this->employeeName = $employeeName;

        return $this;
    }

    public function getEmployeeFunction(): ?string
    {
        return $this->employeeFunction;
    }

    public function setEmployeeFunction(string $employeeFunction): self
    {
        $this->employeeFunction = $employeeFunction;

        return $this;
    }
}
