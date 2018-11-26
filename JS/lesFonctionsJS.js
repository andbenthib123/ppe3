
      function barreRecherche()
{  
    $.ajax
    (
        {
            
            type:"GET", 
            URL:"index.php/C_creationsDeal/afficherLesUsers",
            data:"recherche="+$('#txtRecherche').val(),
            success: function(data)
            {
        
                $('#afficherUsers').empty();
            
            
                $('#afficherUsers').append(data);
        
            },
        
            error:function()
            {
            alert('erreur sql');
            }
            //savoir si il a tout selectionne 

        }
    );
}