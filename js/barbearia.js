/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
  if ($(window).scrollTop() >= 300) {
      $('nav').addClass('fixed-header');
      $('nav div').addClass('visible-title');
  }
  else {
      $('nav').removeClass('fixed-header');
      $('nav div').removeClass('visible-title');
  }
});

//produtos//


//json//

function getProductView(product) {
return `<div class="col-md-4"><div class="servico">
<h2>${product.titulo}</h2>
<img src="${product.foto}" alt="img-cabelo" class="w-100">
<p class="descricao">${product.descricao}</p>
${getProductPricesView(product.precos)}
</div></div>`;
}

function getProductPricesView(precos) {
let sizesView = '<ul class="product-sizes">';

for (let preco of precos) {
    sizesView += `<li>
    🪒&nbsp;<span>${preco.tipo}</span> - ${preco.valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })}
    </li>`;
}

sizesView += '</ul>';

return sizesView;
}

fetch('js/data.json', {
  method: 'GET',
  headers: {
      'Accept': 'application/json',
  },
})
.then(response => response.json())
.then(response => {
let data = response;
console.log(data.produtos)

let productsView = '';

for (let product of data.produtos) {
productsView += getProductView(product);
}

document.querySelector('#produtos').innerHTML = productsView;

});

// numero telefone

function somenteNumeros(e) {
  var charCode = e.charCode ? e.charCode : e.keyCode;
  // charCode 8 = backspace   
  // charCode 9 = tab
 if (charCode != 8 && charCode != 9) {
     // charCode 48 equivale a 0   
     // charCode 57 equivale a 9
     var max = 11;
     var num = document.getElementById('num');           
          
     if ((charCode < 48 || charCode > 57)||(num.value.length >= max)) {
        return false;
     }
     
  }
}