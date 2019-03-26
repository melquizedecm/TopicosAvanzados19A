/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Metodo_Secante;

/**
 *
 * @author clauded
 */
public class SecanteTest {
    public static void main (String[] args){
        //Grafica f= new Grafica("sin(x)*x");
        Funcion f= new Funcion("x^2-2");
        Secante s= new Secante();
        System.out.println(s.raiz(f, 3, 4, 100, 1e-6));
    }
}
