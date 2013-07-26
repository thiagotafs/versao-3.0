$(document).ready(function(){	
// ENQUETE (VOLTAR)
					
					$(".bt-enquete-envia").click(function(){
					
                        cont = 0;
			
                        var id_enquete = $(this).attr("id")
			
                        $(".proc-enquete"+id_enquete).attr("value","Aguarde...")
                        $(".fAlternativa"+id_enquete).each(function(){
							
                            if($(this).attr("checked")){
                                id_alternativa = $(this).val()
                                cont++;
                            }
							
                        })// Pega alternativa marcada
				
				
                        if(cont == 0){
					
                            $("#msg-"+id_enquete).html("Selecione uma alternativa!<br/>")
                            $("#msg-"+id_enquete).fadeIn();
                            $(".proc-enquete"+id_enquete).attr("value","Votar")
                            return false;
					
                        }else{
                            //alert(id_enquete+ " - "+id_alternativa)
							
                            $.ajax({
                                type:"POST",
                                url:"registrar-voto-enquete.php",
                                data:{
                                    fIdEnquete : id_enquete,
                                    fIdAlternativa : id_alternativa
                                },success : function(result){
									
                                    result = result.split("::")
									
                                    switch(result[0]){
										
                                        case "0":
                                            $("#msg-"+id_enquete).html("Você já votou nessa enquete!<br/>")
                                            $("#msg-"+id_enquete).fadeIn();
                                            $(".proc-enquete"+id_enquete).attr("value","Votar")
                                            break;
										
                                        case "1":
										
                                            $("#msg-"+id_enquete).hide();
										
                                            $("#result-"+id_enquete).html(result[1])
										
                                            $("#form-enquete-"+id_enquete).css("display","none")
										
                                            $("#result-"+id_enquete).css("display","block")
										
                                            break;
										
                                    }
									
                                }
                            })
						
                        }
			
                    })
					
					// ENQUETE (ENVIAR)
					
					
					
					$('.fAlternativa').click(function(){
												
						$('#alt-'+ $(this).val()).attr('checked','checked')
						//console.log('#alt-'+ $(this).val());
						})
					
					//MARCAR
		 
					$(".select-enquete").click(function(){
				
                        var id = $(this).attr("id")
		
                        $(".tpl-enquete-centro").each(function(){
                            $(this).attr("style","display:none")
                        })
		
                        $(".select-enquete").each(function(){
                            $(this).attr("style","cursor:pointer")
                        })
						
						$(".pagination ul li").each(function(){
                            $(this).removeClass("active")
                        })
						
						
			
                        $('#pag-'+id).addClass("active")
                        $("#enquete-"+id).attr("style","display:block")
			
                    })
					
                    // TROCA PAGINACAO ENQUETE
		
                    					
                    $(".bt-enquete-result").click(function(){
				
                        $(this).html("Aguarde...")
				
                        var id_enquete = $(this).attr("id")
				
                        $("#msg-"+id_enquete).hide();
				
                        $.ajax({
                            type:"POST",
                            url:"resultado-enquete.php",
                            data:{
                                fIdEnquete:id_enquete
                            }, success : function(result){
							
                                $("#result-"+id_enquete).html(result)
										
                                $("#form-enquete-"+id_enquete).css("display","none")
										
                                $("#result-"+id_enquete).css("display","block")
							
                            }
                        })
				
                    })
					
                    // ARMAZENA VOTO ENQUETE
})