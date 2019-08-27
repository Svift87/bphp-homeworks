
let mainListTranslator = document.querySelectorAll('.main__list__translator');

for (let i = 0; mainListTranslator.length > i; i++) {
    let mainQuestCloused = mainListTranslator[i].querySelector('.main__quest__cloused');

    mainListTranslator[i].addEventListener('click', function() {
        mainListTranslator[i].classList.add('main__list--active');
    });

    mainQuestCloused.addEventListener('click', function () {
        mainListTranslator[i].classList.remove('main__list--active');
    });
}



let mainList = document.querySelectorAll('.main__list');

for (let i = 0; mainList.length > i; i++) {
    let btnEdit = mainList[i].querySelector('.btn__edit'),
        mainQuestCloused = mainList[i].querySelector('.main__quest__cloused');
    if ( btnEdit !== null) {
        btnEdit.addEventListener('click', function() {
            mainList[i].classList.add('main__list--active');
        });
    
        mainQuestCloused.addEventListener('click', function () {
            mainList[i].classList.remove('main__list--active');
        });
    }
}    

let popap = document.querySelector('.popap'),
    btnNewQuest = document.querySelector('.btn__new_quest');
    

if ( btnNewQuest !== null) {
    let mainQuestCloused = popap.querySelector('.main__quest__cloused');

    btnNewQuest.addEventListener('click', function() {
        popap.classList.add('popap--active');
    });
    mainQuestCloused.addEventListener('click', function () {
        popap.classList.remove('popap--active');
    });
}
