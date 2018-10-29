function enregisterModifDemande()
{
    $.ajax(
        {
            type:"post",
            url:"index.php/Ctrl_ModifDemande/enregisterModifDemande",
            data:"descri="+$('#descri').val()+"dateDemande="+$('#dateDemande').val(),
            success:function(data)
            {
              alert('ok');
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}
