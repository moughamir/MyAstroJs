const psychImage = '';
const state = {
  psych: {
    name: 'Éliane Retois',
    speciality: 'Tarologue',
    image: psychImage
  },
  intro: 'Bonjour,<br/>Je suis Éliane voyante intuitive, mais le mot médium doit davantage vous parler. Cartomancienne, j’ai régulièrement recours au tarot de Marseille pour m’apporter un supportphysique et approfondir mes visions et mes ressentis.<br/> Voilà maintenant plus de trente années que me sont apparus mes dons de médiumnité pour la première fois.<br/> Une aventure qui m’a fait redécouvrir l’Humain, une notion que je place au centre de toutes mes consultations.<br/> Parce que sans vous mes visions n’ont plus aucune signification, vous êtes la clé de toute ma passion.',
  domaine: [{
      name: 'L\'amour',
      ref: 'love',
      icon: 'flaticon-heart'
        }, {
      name: 'Le travail',
      ref: 'work',
      icon: 'flaticon-case'
        },
    {
      name: 'L\'argent',
      ref: 'money',
      icon: 'flaticon-bag'
        }],
};
var target = '';

console.log('H')

var $item = document.getElementsByClassName('item-select');
console.log($item)