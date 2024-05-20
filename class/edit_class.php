<?php

class Edit
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

?>

        <form method="post" action='change_article.php?id=<?php echo $this->id; ?>'>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $this->title ?>" id="title" aria-describedby="title" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" class="form-control" value="<?= $this->text ?>" name="text" id="text" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">http://</label>
                <input type="text" class="form-control" value="<?= $this->image ?>" name="image" id="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php
    }
}
