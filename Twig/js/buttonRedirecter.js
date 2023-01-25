/**
 * Comme il est mal vu de mettre un <button> dans un <a> (Considéré comme un html invalide d'après le validateur)
 * J'ai décidé de faire un script qui prend les boutons qui possèdent un "href" (clickredirecthref)
 * Et qui ajoute un event lors d'un clique pour rediriger.
 */
const buttons = document.getElementsByTagName("button");
for (const button of buttons) {
    if (button.dataset.clickredirecthref) {
        const link = button.dataset.clickredirecthref;
        button.addEventListener("click", () => {
            window.open(link, "_blank");
        });
    }
}