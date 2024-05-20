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
        echo '<div class="col-6 col-md-4 col-lg-3">';
        echo '<div class="card" style="width: 100%;">';
        echo '<img src="' . $this->image . '" class="card-img-top  object-fit-cover" style="height:15rem;width:100%" alt="img">';
        echo '<div class="card-body">';
        echo '<h5>' . $this->title . '</h5>';
        echo '<p><span class="badge text-bg-dark">' . $this->text . '</span></p>';

        echo '';
        echo '<a href="exclude_article.php?id= ' . $this->id . '" class="btn btn-danger"><i class="uil uil-trash-alt"  ></i></a>';

        echo '<button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#casa' . $this->id . '"><i class="uil uil-pen"></i></button>';

        echo '    <div class="modal fade" id="casa' . $this->id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '       <div class="modal-dialog">';
        echo '        <div class="modal-content">';
        echo '           <div class="modal-header">';
        echo '           <h1 class="modal-title fs-5" id="exampleModalLabel">Edit your article</h1>';
        echo '          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '       </div>';
        echo '      <div class="modal-body">';
?>
        <form method="post" action='change_article.php?id=<?php echo $this->id; ?>'>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $this->title ?>" id="nome" aria-describedby="nome" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" class="form-control" value="<?= $this->text ?>" name="prezzo" id="prezzo" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" value="<?= $this->image ?>" name="image" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php echo '   </div>';



        echo '</div></div></div></div></div></div>';
    }
}
