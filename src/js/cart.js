/* Render html of the products in the cart --------------------------------------- */
loadCart();

function loadCart() {
  let cartProductsContainer = document.getElementById('cart-products-container');
  if(cartProductsContainer === null) { return; }

  let allProducts = returnAllProductsOnStorage();
  if(allProducts === null || allProducts.length === 0) {
    console.warn('Carrinho vazio');
    return;
  }

  allProducts.forEach((product) => {
    const json = JSON.parse(product);

    if(json.key !== null || json.key !== undefined) {
      createProductsInHtml(cartProductsContainer, json);
    }
  });

  putTotalValueInInput();
}

function createProductsInHtml(cartProductsContainer, productKey) {
  if(cartProductsContainer === null) { throw "A div de produtos do carrinho não foi encontrada!" }
  cartProductsContainer.appendChild(createProductDiv(productKey));
}

function createProductDiv(productObject) {
  let productDiv = document.createElement('div');
  productDiv.classList.add('container-product');
  productDiv.setAttribute('id', productObject.key);

  const productInformationDiv = createProductInformationDiv(
    productObject.name,
    productObject.description,
    productObject.price
  );

  const productButtonControls = createProductControlsDiv(
    productObject.key,
    productObject.quantity
  );

  productDiv.appendChild(productInformationDiv);
  productDiv.appendChild(productButtonControls);

  return productDiv;
}

function createProductInformationDiv(nameProduct, descriptionProduct, priceProduct) {
  let rowDiv = document.createElement('div');
  rowDiv.classList.add('row');

  let contentProductDiv = document.createElement('div');
  contentProductDiv.classList.add('content-product');
  contentProductDiv.classList.add('not-has-image');

  let descriptionDiv = document.createElement('div');
  descriptionDiv.classList.add('description');

  let informationDiv = document.createElement('div');
  informationDiv.classList.add('information');

  //Nome do produto
  let nameProductStrong = document.createElement('strong');
  nameProductStrong.classList.add('name-product');
  const nameProductStrongContent = document.createTextNode(nameProduct);
  nameProductStrong.appendChild(nameProductStrongContent);

  //Descrição do produto
  let descriptionProductP = document.createElement('p');
  descriptionProductP.classList.add('description-product');
  const descriptionProductPContent = document.createTextNode(descriptionProduct);
  descriptionProductP.appendChild(descriptionProductPContent);

  //Preço do produto
  const formatedPrice = parseFloat(priceProduct).toFixed(2).replace('.', ',');
  let priceProductP = document.createElement('p');
  priceProductP.classList.add('price');
  const priceProductPContent = document.createTextNode(`R$ ${ formatedPrice }`);
  priceProductP.appendChild(priceProductPContent);

  //Adicionando tudo
  descriptionDiv.appendChild(nameProductStrong);
  descriptionDiv.appendChild(descriptionProductP);
  informationDiv.appendChild(priceProductP);

  contentProductDiv.appendChild(descriptionDiv);

  rowDiv.appendChild(contentProductDiv);
  rowDiv.appendChild(informationDiv);

  return rowDiv;
}

function createProductControlsDiv(productKey, productInitialQuantity) {
  let rowDiv = document.createElement('div');
  rowDiv.classList.add('row');
  rowDiv.classList.add('controls');
  rowDiv.classList.add('not-has-image');

  let buttonQuantityDiv = document.createElement('div');
  buttonQuantityDiv.classList.add('button-quantity-container');

  //Input
  const ID_INPUT = `input-${ productKey }`;
  let inputQuantity = document.createElement('input');
  inputQuantity.classList.add('quantity');
  inputQuantity.value = productInitialQuantity;
  inputQuantity.disabled = true;
  inputQuantity.setAttribute('id', ID_INPUT);

  //Botão de decremento
  let decrementBtn = document.createElement('button');
  const decrementBtnContent = document.createTextNode('-');
  decrementBtn.appendChild(decrementBtnContent);
  decrementBtn.addEventListener('click', () => {
    decrementQuantityProduct(ID_INPUT);
  });

  //Botão de incremento
  let incrementBtn = document.createElement('button');
  const incrementBtnContent = document.createTextNode('+');
  incrementBtn.appendChild(incrementBtnContent);
  incrementBtn.addEventListener('click', () => {
    incrementQuantityProduct(ID_INPUT);
  });

  //Botão de Atualizar
  let updateBtn = document.createElement('button');
  updateBtn.classList.add('button-add');
  const updateBtnContent = document.createTextNode('Atualizar');
  updateBtn.appendChild(updateBtnContent);
  updateBtn.addEventListener('click', () => {
    addCart(productKey);
    const update = createProductObject(productKey);
    addOrUpdateProductInStorage(update, productKey)
    document.location.reload();
  });

  //Botão de remover
  let removeBtn = document.createElement('button');
  removeBtn.classList.add('button-remove');
  const removeBtnContent = document.createTextNode('Remover');
  removeBtn.appendChild(removeBtnContent);
  removeBtn.addEventListener('click', () => {
    deleteProductOnStorage(productKey);
    document.location.reload();
  });

  buttonQuantityDiv.appendChild(decrementBtn);
  buttonQuantityDiv.appendChild(inputQuantity);
  buttonQuantityDiv.appendChild(incrementBtn);

  rowDiv.appendChild(buttonQuantityDiv);
  rowDiv.appendChild(updateBtn);
  rowDiv.appendChild(removeBtn);

  return rowDiv;
}

function getTotalValue() {
  const cartProductsContainer = document.getElementById('cart-products-container');

  const allPrices = cartProductsContainer.getElementsByClassName('price');
  const allQuantities = cartProductsContainer.getElementsByClassName('quantity');

  let valueOfAllProducts = [];
  let quantityOfAllProducts = [];
  let value = 0;

  Array.from(allPrices).forEach((price) => {
    valueOfAllProducts.push(returnFloatFromPrice(price.innerHTML));
  });

  Array.from(allQuantities).forEach((quantity) => {
    quantityOfAllProducts.push(Number(quantity.value));
  });


  if(valueOfAllProducts.length !== quantityOfAllProducts.length) {
    throw "Erro ao buscar os preços";
  }

  for(let i = 0; i < valueOfAllProducts.length; i++) {
    value += valueOfAllProducts[i] * quantityOfAllProducts[i];
  }

  return value;
}

function putTotalValueInInput() {
  let input = document.getElementById('total-value-input');
  const formatedPrice = parseFloat(getTotalValue()).toFixed(2).replace('.', ',');
  input.value = `R$ ${ formatedPrice }`;
}

function createRequestObject() {
  let requestObject = {
    totalValue: '',
    paymentForm: '',
    deliveryWay: '',
    address: '',
    observation: '',
    products: []
  };

  const allProducts = returnAllProductsOnStorage();
  if(allProducts === null || allProducts.length === 0) { return; }
  allProducts.forEach((product) => {
    const json = JSON.parse(product);

    if(json.key !== null || json.key !== undefined) {
      const name = json.name;
      const description = json.description;
      const quantity = json.quantity;
      const price = json.price;

      requestObject.products.push({
        name,
        description,
        quantity,
        price,
      })
    }
  });

  const totalValue = document.getElementById('total-value-input').value;
  requestObject.totalValue = totalValue;

  const paymentForm = document.getElementById('payment-forms-select').value;
  requestObject.paymentForm = paymentForm;

  const address = document.getElementById('delivery-address-textarea').value;
  requestObject.address = address;

  const observation = document.getElementById('observation-textarea').value;
  requestObject.observation = observation;

  const deliveryWay = document.querySelector('input[name="delivery-way-radio"]:checked').value;
  requestObject.deliveryWay = deliveryWay;

  return requestObject;
}

/* Events --------------------------------------- */
document.getElementById('delivery-way-entrega').addEventListener('click', () => {
  document.getElementById('delivery-address-section').classList.remove('hidden');
});

document.getElementById('delivery-way-retirada').addEventListener('click', () => {
  document.getElementById('delivery-address-section').classList.add('hidden');
});

document.getElementById('btn-delivery').addEventListener('click', () => {
  const cart = createRequestObject();

  if(cart === undefined || cart.products.length === 0) {
    alert('Por favor, escolha alguns produtos!');
    return;
  } 

  if((cart.address === '' || cart.address === null) && cart.deliveryWay === 'entrega') {
    alert('Por favor, escreva o endereço de entrega!');
    return;
  }

  let products = cart.products.map(product => {
    return `${ product.name } (${ product.quantity } uni)`
  })

  let string = "";
  string += `*Forma de entrega:* ${ cart.deliveryWay } \r\n`;
  if(cart.deliveryWay === 'entrega') { string += `*Endereço de entrega:* ${ cart.address } \r\n`; }
  string += `*Forma de pagamento:* ${ cart.paymentForm } \r\n`
  string += `*Valor total:* ${ cart.totalValue } \r\n`
  string += `*Produtos:* ${ products.toString().replace(',', ' / ') }\n`
  string += `*Observações:* ${ cart.observation }\n`

  const href = 'https://api.whatsapp.com/send?phone=5513988282873&text=' + window.encodeURIComponent(string);
  window.open(href, "_blank");
});

