<script src="https://kit.fontawesome.com/33f535655a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="public/assets/libraries/toast/build/toastr.min.js"></script>

    <?php if (isset($script_dir) && isset($script_file)): ?>
        <script src="<?= RUTA_VIEW . $script_dir . '/' . $script_file ?>"></script>
    <?php endif; ?>

</body>
</html>
