<header>
  <nav>
      <ul>
        <li>
          <form action="index.php" method="get">
          <input type="hidden" name="page" value="accueil">        
          <input type="submit" value="Accueil">
          </form>
        </li>
        <li>
          <form action="index.php" method="get">
            <input type="hidden" name="page" value="listing">        
            <input type="submit" value="Listing">
          </form>
        </li>
        <li>
          <form action="index.php" method="get">
            <input type="hidden" name="page" value="admin">        
            <input type="submit" value="Admin">
          </form>
        </li>
      </ul>
  </nav>

  <div class="log">
  
    <?php echo '<span>'.$identity.'</span>';?>
    <button>Déconnexion</button>
  </div>
</header>