/* Increment and Decrement --------------------------------------- */
function getInputAndNumericValue(idInputNumber) {
  const input = document.getElementById(idInputNumber);
  const numericValue = parseInt(input.value);
  return { input, numericValue }
}

function incrementQuantityProduct(idInputNumber) {
  let { input, numericValue } = getInputAndNumericValue(idInputNumber);
  if(numericValue == 50) { return; }
  input.value = numericValue + 1;
}

function decrementQuantityProduct(idInputNumber) {
  let { input, numericValue } = getInputAndNumericValue(idInputNumber);
  if(numericValue == 1) { return; }
  input.value = numericValue - 1;
}

function returnFloatFromPrice(value) {
  const clean = String(value).replace('R$', '').replace(',', '.');
  return parseFloat(clean);
}

/* Create product object --------------------------------------- */
function createProductObject(idProduct) {
  function validateContent(value) {
    return value == NaN || value == "" || value == null ? false : true;
  }

  if(!validateContent(idProduct)) { throw 'Id inválido'; }

  const product = document.getElementById(idProduct);
  if(!validateContent(product)) {
    throw 'Erro ao procurar o produto';
  }

  const price = product.getElementsByClassName('price');
  const name = product.getElementsByClassName('name-product');
  const description = product.getElementsByClassName('description-product');
  const quantity = product.getElementsByTagName('input');

  const validationFields = [
    name[0].textContent,
    description[0].textContent,
    quantity[0].value,
    returnFloatFromPrice(price[0].textContent)
  ];

  let canContinue = true;
  validationFields.forEach(validation => {
    canContinue = validateContent(validation);
  });
  if(!canContinue) { return; }

  const productObject = {
    key: idProduct,
    name: name[0].textContent,
    description: description[0].textContent,
    quantity: quantity[0].value,
    price: returnFloatFromPrice(price[0].textContent),
  };
  const json = JSON.stringify(productObject);
  return json;
}

/* Storage --------------------------------------- */
function addOrUpdateProductInStorage(productString, key) {
  if(productString == null || key == null) throw 'Parâmetros incorretos';
  localStorage.setItem(key, productString);
}

function deleteProductOnStorage(key) {
  localStorage.removeItem(key);
}

function returnAllProductsOnStorage() {
  let products = [];
  let keys = Object.keys(localStorage);
  for(let key of keys) products.push(localStorage.getItem(key));
  return products;
}

/* Add to cart --------------------------------------- */
function addCart(idProduct) {
  const productObject = createProductObject(idProduct);
  addOrUpdateProductInStorage(productObject, idProduct);
}

