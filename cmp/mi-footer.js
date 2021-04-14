class MiFooter
  extends HTMLElement {
  connectedCallback() {
    this.innerHTML = /* html */
      `&copy; 2021
      Andres Zamitiz Bautista.`;
  }
}
customElements.define(
  "mi-footer", MiFooter);
