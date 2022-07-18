

<?php foreach($allClassesArray as $classRoom): ?>
    <?php if ($classRoom->getId() == $_POST['info']): ?>
        <?php echo $classRoom->getId(). " " .$classRoom->getName(). " " .$classRoom->getLocation(). " " . $classRoom->getTeachers(). " ";?>
        <?php echo implode(", ", $Students); ?>
        <button type="submit" name="edit" value="<?php echo $classRoom->getId() ?>">Edit</button>
    <?php endif; ?>
<?php endforeach; ?>
