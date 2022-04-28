import $ from 'jquery';


//import GoogleMap from './modules/GoogleMap';
import MobileMenu from './modules/MobileMenu';
import HeroSlider from './modules/HeroSlider';
import Search from './modules/search';
import MyNotes from './modules/MyNotes';
import Likes from './modules/Like';

//var googleMap = new GoogleMap();
var mobileMenu = new MobileMenu();
var heroSlider = new HeroSlider();
var search = new Search();
var mynotes = new MyNotes();
var likes = new Likes();

if (module.hot) {
   module.hot.accept()
}

