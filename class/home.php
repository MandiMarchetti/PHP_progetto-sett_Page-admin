<?php
class Article
{
    public $id;
    public $title;
    public $text;
    public $image;

    // Construtor para inicializar as propriedades do objeto
    public function __construct($id, $title, $text, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->image = $image;
    }

    function render()
    {
        echo '<div class="col-4 col-md-4 col-lg-3">';
        echo '<div class="card" style="width: 100%;">';
        echo '<img src="' . $this->image . '" class="card-img-top object-fit-cover" style="height:15rem;width:100%" alt="image">';
        echo '<div class="card-body">';
        echo '<h5>' . $this->title . '</h5>';
        echo '<p><span class="badge text-bg-dark">' . $this->text . '</span></p>';
        echo '<a href="exclude_article.php?id=' . $this->id . '" class="btn btn-danger">Delete</a>';
        echo '<a href="edit.php?id=' . $this->id . '" class="btn btn-success">Edit</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
