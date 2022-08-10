<style>

/*
    MENU CIRCULAR 
    CREADO POR BELKIS MERCHÁN
    ESPECIALISTA EN APLICACIONES DE APOYO
    05 DE ABRIL DE 2022  
*/

.circular-menu {
  position: fixed;
  bottom: 1em;
  right: 1em;
}

.circular-menu .floating-btn {
  margin:0;
  display: block;
  width: 3.5em;
  height: 3.5em;
  border-radius: 50%;
  background-color: #f2f0f0;
  box-shadow: 0 9px 9px 0 hsla(0, 3.5%, 28%, 0.92); 
  color: hsl(0, 0%, 100%);
  text-align: center;
  line-height: 3.5em;
  cursor: pointer;
  outline: 0;
  border: 3px solid #930000; /* border: 3px solid #e11515;  */
}
.circular-menu:after {
  display: block;
  content: ' ';
  width: 3.5em;
  height: 3.5em;
  border-radius: 50%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: -2;
  background-color: #e3121ad9;  /* Color del Menu  */
  transition: all .3s ease;
}

.circular-menu.active .floating-btn {
  box-shadow: inset 0 0 3px hsla(0, 0%, 0%, .3);
}

.circular-menu .floating-btn:active {
  box-shadow: 0 4px 8px 0 hsla(0, 0%, 0%, .4);
}

.circular-menu .floating-btn i {
  font-size: 1.3em;
  transition: transform .2s;  
}

.circular-menu.active .floating-btn i {
  transform: rotate(-45deg);
}

.circular-menu.active:after {
  transform: scale3d(5.5, 5.5, 1);
  transition-timing-function: cubic-bezier(.68, 1.55, .265, 1);
}

.circular-menu .items-wrapper {
  padding: 0;
  margin: 0;
}

.circular-menu .menu-item {
  position: absolute;
  top: .2em;
  right: .2em;
  z-index: -1;
  display: block;
  text-decoration: none;
  color: hsl(0, 0%, 100%);
  font-size: 1em;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  text-align: center;
  line-height: 3;
  background-color: hsla(0,0%,0%,.1);
  transition: transform .3s ease, background .2s ease;
}

.circular-menu .menu-item:hover {
  background-color: hsla(0,0%,0%,.3);
}

.circular-menu.active .menu-item {
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.circular-menu.active .menu-item:nth-child(1) {
  transform: translate3d(1em,-7em,0);
}

.circular-menu.active .menu-item:nth-child(2) {
  transform: translate3d(-3.5em,-6.3em,0);
}

.circular-menu.active .menu-item:nth-child(3) {
  transform: translate3d(-6.5em,-3.2em,0);
}

.circular-menu.active .menu-item:nth-child(4) {
  transform: translate3d(-7em,1em,0);
}

/**
 * The other theme for this menu
 */

.circular-menu.circular-menu-left {
  right: auto; 
  left: 1em;
}

</style>
