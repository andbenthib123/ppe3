      function barreRecherche()
{  
    $.ajax
    (
        {
            
            type:"get", 
            URL:"index.php/C_creationsDeals/afficherLesUsers/",
            data:"recherche="+$('#txtRecherche').val(),
            success: function(data)
            {
        
                $('#lesUsers').empty();
            
            
                $('#lesUsers').append(data);
        
            },       
            error:function()
            {
            alert('erreur sql');
            }
        }
    );
}




function noteDeals()
{  
    $.ajax
    (
        {
            
            type:"get", 
            URL:"index.php/C_creationsDeals/noteDeals/",
            data:"",
            success: function()
            {
        
               
            },       
            error:function()
            {
            }
        }
    );
}