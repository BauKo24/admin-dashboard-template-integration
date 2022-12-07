<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Username = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Review::class)]
    private Collection $UserReview;

    public function __construct()
    {
        $this->UserReview = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getUserReview(): Collection
    {
        return $this->UserReview;
    }

    public function addUserReview(Review $userReview): self
    {
        if (!$this->UserReview->contains($userReview)) {
            $this->UserReview->add($userReview);
            $userReview->setUser($this);
        }

        return $this;
    }

    public function removeUserReview(Review $userReview): self
    {
        if ($this->UserReview->removeElement($userReview)) {
            // set the owning side to null (unless already changed)
            if ($userReview->getUser() === $this) {
                $userReview->setUser(null);
            }
        }

        return $this;
    }
}
