public class String_Practice_Question_3 {
    public static void main(String args[]){
        // Problem 3 -> REPLACE <|name|> with some_name 
        String letter = "Dear <|name|>, Thanks a lot";
        System.out.print("String without replace: ");
        System.out.println(letter);
        System.out.print("String after replace: ");
        String replace_1 = letter.replace("<|name|>", "Aashutosh");
        System.out.println(replace_1);
    }
}
