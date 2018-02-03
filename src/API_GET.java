public class API_GET {
    public static void main(String[] args) {
        String queryParams = "customerId=021000030";
        String baseUrl = "https://103.94.135.151:8082/api/getBillInfo";
        String authorizationHeader = "toraf:s@123";
        ClientService ClientService= new ClientService();

        Object Data = ClientService.callByHttpGet(baseUrl, authorizationHeader, queryParams, "application/Json");
        System.out.println("Result:\n" + Data);
    }
}
