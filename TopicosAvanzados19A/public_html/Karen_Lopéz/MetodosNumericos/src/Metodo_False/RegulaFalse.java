/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Metodo_False;

import java.util.ArrayList;

/**
 *
 * @author clauded
 */
public class RegulaFalse {
    ArrayList iter= new ArrayList();
    public double raiz(MetodoFalse f, double x0, double x1,int n,double error){
        double r=Double.NaN;  /*Representa un valor que no es un número (NaN) */
        double x=x0;
        int k=0;
        String i="x0\t\t\t x1\t\t\t x\t\t\t\t\t f(x)"; /*aqui es la tabla de interaciones */
         iter.add(i);
        while(Math.abs(f.eval(x))> error && k <n){
            x= (x0*f.eval(x1)-x1*f.eval(x0))/(f.eval(x1)-f.eval(x0));
          i="\n"+x0+"\t\t"+x1+"\t\t\t"+x+"\t\t\t"+f.eval(x);
          iter.add(i);
            if(f.eval(x0)*f.eval(x)<0)
                x1=x;
            else
                x0=x;
            k++;
        }
        if(k<n) r=x;
        return r;
    }
    public ArrayList getIter(){
        return iter;
    }
}