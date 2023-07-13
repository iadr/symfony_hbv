<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{

    public static $listaSexo = [
        1 => "Masculino",
        2 => "Femenino",
        3 => "Indefinido",
        4 => "Desconocido"
    ];

    public static $listaEstadoCivil= [
        1 => "Soltero",
        2 => "Casado",
        3 => "Viudo",
        4 => "Separado"
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombres = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidoPaterno = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $apellidoMaterno = null;

    #[ORM\Column]
    private ?int $rut = null;

    #[ORM\Column(length: 1)]
    private ?string $dv = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaNacimiento = null;

    #[ORM\Column(nullable: true)]
    private ?int $sexo = null;

    #[ORM\Column(length: 255)]
    private ?string $nombreSocial = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion = null;

    #[ORM\Column(length: 255)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(nullable: true)]
    private ?int $estadoCivil = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pais = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $region = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $comuna = null;

    #[ORM\Column(nullable: true)]
    private ?bool $esUrbano = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $foto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombres(): ?string
    {
        return $this->nombres;
    }

    public function setNombres(string $nombres): static
    {
        $this->nombres = $nombres;

        return $this;
    }

    public function getApellidoPaterno(): ?string
    {
        return $this->apellidoPaterno;
    }

    public function setApellidoPaterno(string $apellidoPaterno): static
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    public function getApellidoMaterno(): ?string
    {
        return $this->apellidoMaterno;
    }

    public function setApellidoMaterno(?string $apellidoMaterno): static
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    public function getRut(): ?int
    {
        return $this->rut;
    }

    public function setRut(int $rut): static
    {
        $this->rut = $rut;

        return $this;
    }

    public function getDv(): ?string
    {
        return $this->dv;
    }

    public function setDv(string $dv): static
    {
        $this->dv = $dv;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?\DateTimeInterface $fechaNacimiento): static
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getSexo(): ?int
    {
        return $this->sexo;
    }

    public function setSexo(?int $sexo): static
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getNombreSocial(): ?string
    {
        return $this->nombreSocial;
    }

    public function setNombreSocial(string $nombreSocial): static
    {
        $this->nombreSocial = $nombreSocial;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getEstadoCivil(): ?int
    {
        return $this->estadoCivil;
    }

    public function setEstadoCivil(?int $estadoCivil): static
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): static
    {
        $this->pais = $pais;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getComuna(): ?string
    {
        return $this->comuna;
    }

    public function setComuna(?string $comuna): static
    {
        $this->comuna = $comuna;

        return $this;
    }

    public function isEsUrbano(): ?bool
    {
        return $this->esUrbano;
    }

    public function setEsUrbano(?bool $esUrbano): static
    {
        $this->esUrbano = $esUrbano;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): static
    {
        $this->foto = $foto;

        return $this;
    }
}
