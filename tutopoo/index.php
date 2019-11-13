<?php


class Book
{
  private $id;
  private $title;
  private $image;
  private $description;
  private $year;
  private $country;
  private $wikipediaLink;
  private $pages;
  private $language;
  private $author;


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param mixed $image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Year
     *
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of Year
     *
     * @param mixed $year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of Country
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of Country
     *
     * @param mixed $country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of Wikipedia Link
     *
     * @return mixed
     */
    public function getWikipediaLink()
    {
        return $this->wikipediaLink;
    }

    /**
     * Set the value of Wikipedia Link
     *
     * @param mixed $wikipediaLink
     *
     * @return self
     */
    public function setWikipediaLink($wikipediaLink)
    {
        $this->wikipediaLink = $wikipediaLink;

        return $this;
    }

    /**
     * Get the value of Pages
     *
     * @return mixed
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of Pages
     *
     * @param mixed $pages
     *
     * @return self
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of Language
     *
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the value of Language
     *
     * @param mixed $language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get the value of Author
     *
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     *
     * @param mixed $author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

}


$db = new PDO('mysql:host=localhost;dbname=books', 'root');

$stmt = $db->prepare('SELECT * FROM books  LIMIT 1, 2');

$stmt->execute();
$book = $stmt ->fetch(PDO::FETCH_ASSOC);

$bookModel = new Book;

$bookModel->setId($book['id']);
$bookModel->setTitle($book['title']);
$bookModel->setDescription($book['description']);
$bookModel->setAuthor($book['author_id']);
$bookModel->setPages($book['pages']);
$bookModel->setImage($book['image']);
$bookModel->setCountry($book['country']);
$bookModel->setWikipediaLink($book['wikipedia_link']);
$bookModel->setLanguage($book['language']);



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table style="border: 1px solid black;">
          <div class="image">
            <img src="<?php echo $bookModel->getImage(); ?>" alt="<?php $bookModel->getTitle(); ?>">
          </div>
            <tr>
              <th>Id</th>
              <th>title</th>
              <th>Description</th>
              <th>pages</th>
            </tr>
            <tr>
              <td><?php echo $bookModel->getId(); ?></td>
              <td><?php echo $bookModel->getTitle(); ?></td>
              <td><?php echo $bookModel->getDescription(); ?></td>
              <td><?php echo $bookModel->getPages(); ?></td>
            </tr>
        </table>
      </div>
    </div>
  </div>









  </body>
</html>
