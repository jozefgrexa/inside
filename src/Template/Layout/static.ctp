<!DOCTYPE html>
<html lang="sk-SK">
<head>
    <?= $this->element('Frontend/head'); ?>
</head>

<body>
    <?php echo $this->element('Frontend/header'); ?>

    <div id="main">
        <?= $this->fetch('content'); ?>
    </div>

    <?php echo $this->element('Frontend/footer'); ?>
</body>
</html>