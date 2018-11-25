

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
        if (data.length = 0)
        {
            $('#afficherUsers').empty(data);
            
            $('#afficherUsers').hide(data);
        
        
        }
        else
        {
$('#afficherUsers').append(data);
        }

},
error:function(data)
{
alert('erreur sql');
}
   //savoir si il a tout selectionne 

        }
    );
}
    
    

function insereOffreAjax()
{

    $.ajax
    (
        {
            type:"POST",
            URL:"index.php/C_creationOffre/insererOffre",
            data:"txtDescriptionsOffre="+$('#txtDescriptionsOffre').val()+"txtSelect="+$('#txtSelect').val()+"txtidOffre="+$('#txtidOffre').val(),
            success:function(data)
    {
   
   //savoir si il a tout selectionne 
    }        
        }
    );
}

