public class String_Practice_Question_4 {
    public static void main(String args[]){
        // Problem 4 -> WAP to detect double and triple spaces in a string 
        String str_1 = "This string contains double      and triple spaces";
        System.out.println(str_1.indexOf("  "));
        System.out.println(str_1.indexOf("   "));
        
    }
}
