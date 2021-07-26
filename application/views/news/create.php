<h2><?= $title; ?></h2>
<?= validation_errors(); ?>

<?= form_open('news/create'); ?>

    <label class="" for="title"> Title </label>
    <input type="text" name="title">

    <label for="text"> Text </label>
    <textarea name="text" cols="30" rows="10"></textarea>

    <input type="submit" name="submit" value="Create News Item">

<?= form_close(); ?>