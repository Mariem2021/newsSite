window.addEventListener("load", function () {
    // charger doc y compris ressources dependantes fichier js
    var news = document.getElementsByClassName("news-wrap");
   
    // boucler toutes les infos
    for (let new of news) {
      // cliquer
      new.addEventListener("click", function () {
        // ontenir une info via id titre et desc elem type tab
        var id = this.dataset.id,
            titre = this.getElementsByClassName("news-title")[0].innerHTML,
            desc = this.getElementsByClassName("news-desc")[0].innerHTML;
   
        // affichage
        alert(`selectionner - ID: ${id}, TITLE: ${titre} DESC: ${desc}`);
      });
    }
  });