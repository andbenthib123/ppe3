
function insereDemandeAjax()
{
    $.ajax
    (
        {
            type:"get",
            URL:"index.php/C_creationDemande/insererFormulaire",
            data:"txtDescriptions="+$('#txtDescriptions').val()+"txtSelect="+$('#txtSelect').val()+"idDemande="+$('#txtidDemande').val(),
            success:function(data)
    {
   if($('#txtDescriptions').val()=="")
   {
    alert('remplir tout les champs');
   }
   //savoir si il a tout selectionne 
    }
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

function barrerecherche(txtRecherche)
{
$.ajax
(
{
    type:'get',
    URL:'index.php/C_creationsDeal/afficherLesUsers',
    data:"txtRecherche="+txtRecherche,
    success: function(data)
    {
        $('#afficherUsers').empty();
        $('#afficherUsers').append(data);
    },
    error:function()
    {
        alert('erreur sql');
    }
}


)

}