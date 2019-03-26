/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Metodo_Secante;
import org.nfunk.jep.JEP;
/**
 *
 * @author clauded
 */
public class Funcion {
    JEP j=new JEP();
    public Funcion (String def){
        j.addVariable("x",0);
        j.addStandardConstants();
        j.addStandardFunctions();
        j.parseExpression(def);
        if(j.hasError()){
            System.out.println(j.getErrorInfo());
        }
    }
    public double eval(double x){
        double r;
        j.addVariable("x",x);
        r=j.getValue();
        if(j.hasError()){
            System.out.println(j.getErrorInfo());
        }
        return r;
    }
}
