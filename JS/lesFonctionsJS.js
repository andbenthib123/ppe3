function afficherMessageErreur()
{
    $.ajax
    (
        {
type:"POST",
URL:"index.php/Controller_login/login",
data:"",
success:function(data)
{
    if($('#txtUser').val()=="" || $('#txtMdp').val()=="")
    {
       
    
        
    }
  
    },
error:function(data)
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
            success:function(data)
    {
    if($('#txtNom').val()=="" || $('#txtPrenom').val()=="" || $('#txtLogin').val()=="" || $('#txtMdp').val()=="" )
    {
       
  
   

        
    }
  
    },
        error:function()
    {
        alert('erreur sql');
    }
     
        }
    );
}


function insereDemandeAjax()
{

    $.ajax
    (
        {
            type:"GET",
            URL:"index.php/C_creationFormulaire/insererFormulaire",
            data:"textdescription="+$('#txtDescriptions').val()+"txtSelect="+$('#txtSelect').val()+"idDemande="+$('#txtidDemande').val(),
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


function insereOffreAjax()
{

    $.ajax
    (
        {
            type:"GET",
            URL:"index.php/C_creationOffre/insererOffre",
            data:"textdescriptionOffre="+$('#txtDescriptionsOffre').val()+"txtSelect="+$('#txtSelect').val()+"idOffre="+$('#txtidOffre').val(),
            success:function(data)
    {
   if($('#txtDescriptionsOffre').val()=="")
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