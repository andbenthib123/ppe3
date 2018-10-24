function afficherMessageErreur()
{
    $.ajax
    (
        {
type:"POST",
URL:"index.php/Controller_login/login",
data:"",
success:function()
{
    if($('#txtUser').val()=="" || $('#txtMdp').val()=="")
    {
       
    $('#txtmessageAlert').show();
        
    }
  
    },
error:function()
{
    alert('erreur sql');
}


        }
    );
}

function afficherMessageErreurInscription()
{
    $.ajax
    (
        {
            type:"GET",
            URL:"index.php/Controller_login/inscriptions",
            data:"",
            success:function()
    {
    if($('#txtNom').val()=="" || $('#txtPrenom').val()=="" || $('#txtLogin').val()=="" || $('#txtMdp').val()=="" )
    {
       
    $('#txtmessageAlertInscription').show();
    $('#txtmessageAlertInscription').append();

        
    }
  
    },
        error:function()
    {
        alert('erreur sql');
    }
     
        }
    );
}


function service()
{

    $.ajax
    (
        {
            type:"GET",
            URL:"index.php/C_creationFormulaire/insererFormulaire",
            data:"textdescription="+$('#txtDescriptions')+"txtSelect="+$('#txtSelect')+"idDemande="+$('#txtidDemande').val(),
            success:function(data)
    {
   if($('#txtDescriptions').val()=="")
   {
    alert('remplir tout les champs');
   }
   //savoir si il a tout selectionne 
    },
            
    error:function()
    {
    alert('erreur sql');
    }        
        }
    );
}