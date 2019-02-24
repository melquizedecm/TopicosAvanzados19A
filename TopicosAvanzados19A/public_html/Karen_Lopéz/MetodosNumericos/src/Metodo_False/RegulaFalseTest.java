/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Metodo_False;

/**
 *
 * @author clauded
 */
public class RegulaFalseTest {   /*es el principal */
    public static void main(String[] args) {
       MetodoFalse f=new MetodoFalse (){
           public double eval(double x){
               return Math.sin(x)*x;
           }
       };
       RegulaFalse rf= new RegulaFalse();
                            /*v  v  #*/
        double raiz=rf.raiz(f, 9, 7, 10, 1e-6);  /*aqui van los valores de f (donde esta los v)y cuantas interaciones quieres(donde esta el #) */
        System.out.println("Raiz: "+raiz);
        System.out.println("Iteraciones: \n"+rf.getIter());
    }
}