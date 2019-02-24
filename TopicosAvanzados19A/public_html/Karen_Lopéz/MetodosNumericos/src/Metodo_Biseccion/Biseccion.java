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
public abstract class Biseccion {
        public  abstract double f(double x);
            
        
        public final double raiz(double x0, double x1, double tolerancia){
            double x=Double.NaN;
            if(f(x0)*f(x1)<0){
                do{
                    x=(x0+x1)/2;
                    if(f(x0)*f(x)<0){
                    x1=x;
                }else{
                        x0=x;
                    }
                }while(Math.abs(f(x))> tolerancia);
            }
            return x;
        }
}
