loadCart();

/* Eventos dos selects de delivery --------------------------------------- */
document.getElementById('delivery-way-entrega').addEventListener('click', () => {
  document.getElementById('delivery-address-section').classList.remove('hidden');
  document.getElementById('delivery-fee-section').classList.remove('hidden');
});

document.getElementById('delivery-way-retirada').addEventListener('click', () => {
  document.getElementById('delivery-address-section').classList.add('hidden');
  document.getElementById('delivery-fee-section').classList.add('hidden');
});

document.getElementById('delivery-way-local').addEventListener('click', () => {
  document.getElementById('delivery-address-section').classList.add('hidden');
  document.getElementById('delivery-fee-section').classList.add('hidden');
});

/* Evento do botão de "Pedir via Whatsapp" --------------------------------------- */
document.getElementById('btn-delivery').addEventListener('click', () => {
  const cart = createRequestObject();
  const isValid = validationFields(cart);
  if(!isValid) {
    return;
  }

  const string = generateProductsString(cart);
  const owner_zap = document.getElementById('btn-delivery').value;
  const href = `https://api.whatsapp.com/send?phone=${ owner_zap }&text=` + string;
  localStorage.clear();
  window.open(href, "_self");
});