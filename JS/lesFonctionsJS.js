      function barreRecherche()
{  
   if($('#txtRecherche').val().length>"2")
   {
        $.ajax
        (
         {          
            type: 'get', 
            url:"afficherLesUsers",
            data:"recherche="+$('#txtRecherche').val(),
            success: function(data)
            {
            $('#lesUsers').empty();
            $('#demOffreUserSelectionne').empty();
            $('#lesUsers').append(data);
            },       
            error:function()
            {
            alert('erreur sql');
            }
         }
        )
    }
    else
    {
        $('#lesUsers').empty();
        $('#demOffreUserSelectionne').empty();

    }
}
   
var idMonOffre;
var MonServiceOffre;
var idMaDemande;
var MonServiceDemande;
var idSonOffre;
var serviceSonOffre;
var idSaDemande;
var serviceSaDemande

    
function recupOffre(idDeOffre,idService)
{

    idMonOffre=idDeOffre;
    MonServiceOffre=idService;
    console.log(idDeOffre,idService);

}
function recupDemande(idDeDemande,idService)
{
    

    idMaDemande=idDeDemande;
    MonServiceDemande=idService;
    console.log(idDeDemande,idService);

}
function selectOffreDemande(selectOffre,idService)
{
    idSonOffre=selectOffre;
    serviceSonOffre=idService;
    console.log(selectOffre,idService);

}
function selectAll(tousRecup,idService)
{
    idSaDemande=tousRecup;
    serviceSaDemande=idService;
    console.log(tousRecup,idService);

}

function ajouterDeals()
{
    if(MonServiceDemande != serviceSonOffre && MonServiceOffre != serviceSaDemande)
    {
        if(idMaDemande!=idSonOffre && idMonOffre!=idSaDemande)
        {
            $.ajax
            (
                {
                    type:"get",
                    url:"ajouterDeals",
                    data:"idOffreUser1="+idSonOffre+"&idOffreUser2="+idMonOffre,
                    success:function(data)
                    {
                        alert("L'insertion du deal à été effectué");
                     
                    },
                    error:function()
                    {
                        alert("Erreur lors de l'ajout du deal");
                    }
                }
            )
        }
        else
        {
            alert("Vous ne pouvez demandez une offre en échange de la même offre");
        }
    }
    else
    {
        if(MonServiceDemande == serviceSonOffre)
        {
            alert("L'offre choisie ne correspond à aucune de vos demandes");
        }
        else
        {
            alert("L'offre que vous proposez ne correspond à aucunes des demandes de l'utilisateur sélectionner");
        }
    }
}



function demOffreUserSelectionne(idleUser)
{  
    
    $.ajax
    (
        {
            
            type: 'get', 
            url:"demOffreUserSelectionne",
            data:"offreDemande="+idleUser,
            success: function(data)
            {
                $('#demOffreUserSelectionne').empty();
                $('#demOffreUserSelectionne').append(data);

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

