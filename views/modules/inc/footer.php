    <script src="<?php echo BASE?>views/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        Array.from(document.querySelectorAll('.column')).forEach(col=>{
            new Sortable(col, {
                group: 'shared', animation: 150
            }); 
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo BASE?>views/js/jquery.magnific.min.js"></script>

</body>
</html>