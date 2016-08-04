<footer>
	<h1><?php echo $page->title()->html() ?></h1>
	<a href=""><img src="<?php echo url('assets/images/trash.png') ?>" alt=""></a>
</footer>

<?php echo js('assets/js/classie.js') ?>
<?php echo js('assets/js/photostack.js') ?>
<script>
  // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
  new Photostack( document.getElementById( 'photostack-1' ), {
    callback : function( item ) {
      //console.log(item)
    }
  } );
</script>

</body>
</html>