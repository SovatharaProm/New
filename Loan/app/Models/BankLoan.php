class BankLoan extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'rate', 'MaxAmount','MinAmount','Description','PaymentSched'];
}
