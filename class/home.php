<?php
class Article
{
    public $id;
    public $title;
    public $text;
    public $image;

    // Costruttore per inizializzare le proprietà dell'oggetto
    public function __construct($id, $title, $text, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->image = $image;
    }

    function render()
    {
        echo '<div class="col-6 col-md-4 col-lg-3">';
        echo '<div class="card" style="width: 100% ;">';
        echo '<img src="' . $this->image . '" class="card-img-top  object-fit-cover" style="height:15rem;width:100%" alt="img">';
        echo '<div class="card-body">';
        echo '<h5>' . $this->title . '</h5>';
        echo '<p> <span class="badge text-bg-dark">' . $this->text . '</span></p>';
        echo '<a href="exclude_article.php?id= ' . $this->id . '" class="btn btn-danger">Elimina</a>';

        echo '<button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#casa' . $this->id . '">Modifica </button>';

        echo '    <div class="modal fade" id="title' . $this->id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '       <div class="modal-dialog">';
        echo '        <div class="modal-content">';
        echo '           <div class="modal-header">';
        echo '           <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>';
        echo '          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '       </div>';
        echo '      <div class="modal-body">';
?>
        <form method="post" action='change_article.php?id=<?php echo $this->id; ?>'>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $this->title ?>" id="title" aria-describedby="title" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="textarea" class="form-control" value="<?= $this->text ?>" name="text" id="text" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">http://</label>
                <input type="text" class="form-control" value="<?= $this->image ?>" name="image" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php echo '   </div>';



        echo '</div></div></div></div></div></div>';
    }
}
