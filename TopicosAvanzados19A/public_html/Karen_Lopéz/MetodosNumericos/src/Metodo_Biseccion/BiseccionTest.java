/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Metodo_Biseccion;

/**
 *
 * @author clauded
 */
public class BiseccionTest extends Biseccion {
    public static void main(String[] args) {
        Biseccion b= new BiseccionTest();
        System.out.println("Raiz: "+b.raiz(1, 2,0.001));
        
    }

    @Override
    public double f(double x) {
        return x*x-5;
    }
}
