import org.json.JSONException;
import org.json.JSONObject;

public class API_POST {
    public static void main(String[] args) throws JSONException {
        String baseUrl="https://103.94.135.151:8082";
        String paymentUrl="/api/payment";

        JSONObject requestBody=new JSONObject();
        requestBody.put("customerId","010100029");
        requestBody.put("paidAmount",new Integer(12000));
        requestBody.put("bankName","ROCKET");
        requestBody.put("transactionId","ABCD");
        requestBody.put("mobileNo","01717785793");

        System.out.print("Body for post: "+requestBody+"\n");

        String authorizationHeader="toraf:s@123";
        ClientService ClientService= new ClientService();

        Object  Data= ClientService.callByHttpPost(baseUrl+ paymentUrl,authorizationHeader,requestBody.toString(),"application/Json");
        System.out.println("Result:\n"+Data);
    }
}
