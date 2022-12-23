<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CoverImage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column]
    private ?int $AvRating = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Review::class, orphanRemoval: true)]
    private Collection $ProductReview;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'products')]
    private Collection $ProductCategory;

    #[ORM\ManyToOne(inversedBy: 'Products')]
    private ?User $user = null;

    public function __construct()
    {
        $this->ProductReview = new ArrayCollection();
        $this->ProductCategory = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getCoverImage(): ?string
    {
        return $this->CoverImage;
    }

    public function setCoverImage(?string $CoverImage): self
    {
        $this->CoverImage = $CoverImage;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getAvRating(): ?int
    {
        return $this->AvRating;
    }

    public function setAvRating(int $AvRating): self
    {
        $this->AvRating = $AvRating;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getProductReview(): Collection
    {
        return $this->ProductReview;
    }

    public function addProductReview(Review $productReview): self
    {
        if (!$this->ProductReview->contains($productReview)) {
            $this->ProductReview->add($productReview);
            $productReview->setProduct($this);
        }

        return $this;
    }

    public function removeProductReview(Review $productReview): self
    {
        if ($this->ProductReview->removeElement($productReview)) {
            // set the owning side to null (unless already changed)
            if ($productReview->getProduct() === $this) {
                $productReview->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getProductCategory(): Collection
    {
        return $this->ProductCategory;
    }

    public function addProductCategory(Category $productCategory): self
    {
        if (!$this->ProductCategory->contains($productCategory)) {
            $this->ProductCategory->add($productCategory);
        }

        return $this;
    }

    public function removeProductCategory(Category $productCategory): self
    {
        $this->ProductCategory->removeElement($productCategory);

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
