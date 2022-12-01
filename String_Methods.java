import java.util.Scanner;

public class String_Methods {
    public static void main(String args[]) {

        // System.out.println("STRING METHODS: ");
        // LENGTH OF THE STRING -> THIS WILL FIND THE LENGTH OF THE STRING
        // String name = "aashutosh";
        // System.out.print("The length of the string will be: ");
        // int a = name.length();
        // System.out.println(a);

        // TO MAKE LOWERCASE -> THIS WILL MAKE THE STRING LOWERCASE
        // String name_1 = "LOWER";
        // System.out.print("The lower case of LOWER will be: ");
        // String Lstring = name_1.toLowerCase();
        // System.out.println(Lstring);

        // TO MAKE UPPERCASE -> THIS WILL MAKE THE STRING UPPERCASE
        // String name_2 = "upper";
        // System.out.print("The upper case of upper will be: ");
        // String Ustring = name_2.toUpperCase();
        // System.out.println(Ustring);

        // TO TRIM -> THIS WILL TRIM THE STRING FROM LHS AS WELL AS RHS
        // String trim = " Aashutosh ";
        // System.out.print("Before trim: ");
        // System.out.println(trim);
        // System.out.print("After trim: ");
        // System.out.println(trim.trim());

        // SUB STRING
        // String sub_string = "Aashutosh";

        // ISME YEH JITNA COUNT DAALOGE VO STARTING OF THE STRING ME SE DELETE HO JAAEGA
        // for example Aashutosh hai to pehle ke 4 htaado to bacha uthosh which will be
        // printed.

        // IF WE WRTIE 0 THEN VO VHI STRING PRINT KR DEGA
        // System.out.println(sub_string.substring(4));
        // System.out.println(sub_string.substring(0));

        // String sub_str = "Aashutosh";
        // System.out.println(sub_str.substring(4, 6));
        // THIS WILL NOT INCLUDE THE END INDEX -> IMPORTANT

        // String name = "Harry";
        // System.out.print("Non-replaced string: ");
        // System.out.println(name);
        // System.out.println("Replaced with 'p' ");
        // System.out.print("Replaced string: ");
        // String replace = name.replace("r", "p");
        // System.out.println(replace);

        // String name_1 = "Aashutosh";
        // System.out.println(name_1.replace("Aash", "Raav"));
        // String name_2 = "Bajaj";
        // System.out.print(name_1.replace('A', 'B'));
        // System.out.println(name_2.replace('B', 'A'));

        // String name = "Harry";
        // THIS WILL REPLACE BOTH
        // System.out.println(name.replace("r", "ier"));

        // String name = "Harry";
        // System.out.print("Does this string starts with 'H': ");

        // System.out.println(name.startsWith("Ha")); // IF THE string STARTS WITH H
        // THEN IT WILL PRINT TRUE OTHERWISE FALSE.

        // System.out.print("Does this string ends with 't': ");
        // System.out.println(name.endsWith("te")); // IF THE string ENDS WITH H THEN IT
        // WILL PRINT TRUE OTHERWISE FALSE.

        // String char_at = "Aashutosh";
        // System.out.println(char_at.charAt(2));
        // HERE INDEX STARTS WITH 0

        // String Index_of = "Aashutosh";
        // System.out.println(Index_of.indexOf("ssasa"));
        // System.out.println(Index_of.indexOf("s"));
        // THIS WILL PRINT THE INDEX OF A PARTICULAR CHARACTER

        // System.out.println(Index_of.lastIndexOf("h"));
        // System.out.println(Index_of.lastIndexOf("Aas", 9));
        // THIS WILL PRINT THE LAST INDEX AND SEARCH IS FROM RIGHT TO LEFT

        // MAKE THIS IN IF - ELSE STATEMENT
        // String name = "B Praak";
        // System.out.println("Hello " + name + " How are you??");
        // Scanner sc = new Scanner(System.in);
        // System.out.print("Answer: ");
        // String s = sc.next();
        // System.out.println("B Praak is fine ");

        // String name = "Aashutosh";
        // System.out.println(name.equals("Harry"));
        // IF THE STRING PRINTED IS SAME THE TRUE AND IF NOT IT IS FALSE



        // IMPORTANT

        String Hello_world = "hello WORLD"; 
        System.out.println(Hello_world.equalsIgnoreCase("HarRYisHeRE"));

    }
}
