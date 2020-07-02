var valor;			
		
		
		function conversao(){
			var dolarAmericano = 5.48;
			var dolarCanadense = 4.01;
			var dolarAustraliano = 3.73;
			var euro = 6.10;
			var libra = 6.68;
			var iene = 20.00; 
			var pesoArgentino = 12.50;
			var pesoChileno = 100.00; 
			var pesoUruguaio = 7.69;
			var bitcoin = 49619.48;
			var ouro = 310.18; // em gramas
			
			valor = parseFloat(document.getElementById("text2").value);
			var opcao = document.getElementById("opções").value;
			
			
			if(isNaN(valor)){
				alert("Apenas numeros devem ser informados");				
			}	
			
			if(opcao==1){
			  document.getElementById("valorFinal").innerHTML ="USD=" + (valor/dolarAmericano).toFixed(2);			
				
			}
			
			if(opcao==2){
				document.getElementById("valorFinal").innerHTML ="CAD=" + (valor/dolarCanadense).toFixed(2);			
				
			}
			
			if(opcao==3){
				document.getElementById("valorFinal").innerHTML ="AUD=" + (valor/dolarAustraliano).toFixed(2);			
				
			}
			
			if(opcao==4){
				document.getElementById("valorFinal").innerHTML ="EUR=" + (valor/euro).toFixed(2);			
				
			}

			if(opcao==5){
				document.getElementById("valorFinal").innerHTML ="£=" + (valor/libra).toFixed(2);			
				
			}

			if(opcao==6){
				document.getElementById("valorFinal").innerHTML ="JPY=" + (valor*iene).toFixed(2);			
				
			}

			if(opcao==7){
				document.getElementById("valorFinal").innerHTML ="ARS=" + (valor*pesoArgentino).toFixed(2);			
				
			}

			if(opcao==8){
				document.getElementById("valorFinal").innerHTML ="CLP=" + (valor*pesoChileno).toFixed(2);			
				
			}

			if(opcao==9){
				document.getElementById("valorFinal").innerHTML ="UYU=" (valor*pesoUruguaio).toFixed(2);			
				
			}

			if(opcao==10){
				document.getElementById("valorFinal").innerHTML = (valor/bitcoin).toFixed(4) + "Bitcoins";			
				
			}

			if(opcao==11){
				document.getElementById("valorFinal").innerHTML = (valor/ouro).toFixed(2) + "G";			
				
			}
			
					
		}